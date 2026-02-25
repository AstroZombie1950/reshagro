document.addEventListener("DOMContentLoaded", function () {

	const form = document.getElementById("projectFormModal");
	if (!form) return;

	const alertBox = form.querySelector(".form-alert-modal");
	const formContent = form.querySelector(".contact-form__content-modal");
	const fileInput = form.querySelector("input[type='file']");
	const submitBtn = form.querySelector("button");
    const nameInput = form.querySelector("input[name='name']");

    nameInput.addEventListener("input", function () {
        this.value = this.value.replace(/[^A-Za-zА-Яа-яЁё\s]/g, "");
    });

	const allowedExtensions = [
		"zip","jpg","jpeg","png",
		"docx","xlsx","pdf","dxf","dwg"
	];

	const maxFileSize = 20 * 1024 * 1024;
	const maxFiles = 10;

    // ================= File Handling =================

    const fileList = form.querySelector(".file-list");
    let selectedFiles = [];

    function formatSize(bytes) {
        return (bytes / (1024 * 1024)).toFixed(2) + " МБ";
    }

    function renderFileList() {
        fileList.innerHTML = "";

        selectedFiles.forEach((file, index) => {

            const item = document.createElement("div");
            item.className = "file-item";

            const info = document.createElement("div");
            info.className = "file-info";
            info.textContent = file.name + " (" + formatSize(file.size) + ")";

            const removeBtn = document.createElement("button");
            removeBtn.type = "button";
            removeBtn.className = "file-remove";
            removeBtn.textContent = "×";

            removeBtn.addEventListener("click", function () {
                selectedFiles.splice(index, 1);
                updateInputFiles();
                renderFileList();
            });

            item.appendChild(info);
            item.appendChild(removeBtn);

            fileList.appendChild(item);
        });
    }

    function updateInputFiles() {
        const dataTransfer = new DataTransfer();

        selectedFiles.forEach(file => {
            dataTransfer.items.add(file);
        });

        fileInput.files = dataTransfer.files;
    }

    fileInput.addEventListener("change", function () {

        const newFiles = Array.from(this.files);

        newFiles.forEach(file => {
            if (selectedFiles.length < 10) {
                selectedFiles.push(file);
            }
        });

        updateInputFiles();
        renderFileList();
    });

	const nameRegex = /^[A-Za-zА-Яа-яЁё\s]+$/u;
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

	const autoResetDelay = 5000;

	function setInvalid(field) {
		field.classList.add("is-invalid");
		field.classList.remove("is-valid");
	}

	function setValid(field) {
		field.classList.remove("is-invalid");
		field.classList.add("is-valid");
	}

	function clearValidation() {
		form.querySelectorAll(".is-invalid, .is-valid")
			.forEach(el => el.classList.remove("is-invalid", "is-valid"));
	}

	function showError(message) {
		alertBox.className = "form-alert error";
		alertBox.textContent = message;
		requestAnimationFrame(() => {
			alertBox.classList.add("is-visible");
		});
	}

	function showSuccess(message) {
		alertBox.className = "form-alert success";
		alertBox.textContent = message;
		formContent.classList.add("is-hidden");

		requestAnimationFrame(() => {
			alertBox.classList.add("is-visible");
		});

		setTimeout(() => {
			resetFormUI();
		}, autoResetDelay);
	}

	function resetFormUI() {
		alertBox.classList.remove("is-visible");

		setTimeout(() => {
			alertBox.className = "form-alert";
			alertBox.textContent = "";
			formContent.classList.remove("is-hidden");
			form.reset();
			clearValidation();
		}, 300);
	}

	form.addEventListener("submit", async function (e) {
		e.preventDefault();

		clearValidation();
		alertBox.className = "form-alert";
		alertBox.textContent = "";

		const name = form.name.value.trim();
		const email = form.email.value.trim();

		let isValid = true;

		// Имя
		if (!nameRegex.test(name)) {
			setInvalid(form.name);
			isValid = false;
		} else {
			setValid(form.name);
		}

		// Email
		if (!emailRegex.test(email)) {
			setInvalid(form.email);
			isValid = false;
		} else {
			setValid(form.email);
		}

		// Файлы
		const files = fileInput.files;

		if (files.length > maxFiles) {
			setInvalid(fileInput);
			showError("Maximum 10 files allowed.");// <------------------------------------------
			return;
		}

		for (let file of files) {
			const ext = file.name.split(".").pop().toLowerCase();

			if (!allowedExtensions.includes(ext) || file.size > maxFileSize) {
				setInvalid(fileInput);
				showError("Invalid file or file size exceeded.");// <------------------------------------------
				return;
			}
		}

		if (!isValid) return;

		submitBtn.classList.add("is-loading");

		const formData = new FormData(form);

		try {
			const response = await fetch("/php/en/send.php", {
				method: "POST",
				body: formData
			});

			const result = await response.json();

			submitBtn.classList.remove("is-loading");

			if (result.success) {
				showSuccess("Your request has been successfully sent. We will contact you shortly.");// <----------------------------
			} else {
				showError(result.message || "Submission error.");// <------------------------------------------
			}

		} catch (error) {
			submitBtn.classList.remove("is-loading");
			showError("Connection error.");// <------------------------------------------
		}
	});

});