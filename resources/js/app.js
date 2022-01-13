require("./bootstrap");

import { Modal } from "bootstrap";

window.addEventListener("DOMContentLoaded", function () {
    let deleteForms = document.querySelectorAll(".delete-form");
    deleteForms.forEach((deleteForm) => {
        deleteForm.addEventListener("submit", onFormSubmit);
    });
});

function onFormSubmit(event) {
    event.preventDefault();

    let modalElement = document.getElementById("delete-modal");

    adaptModalMessage(event, modalElement);

    let deleteConfirmationModal = new Modal(modalElement);
    deleteConfirmationModal.show();

    setEventListenerOnModalButtons(deleteConfirmationModal, this);
}

function adaptModalMessage(event, modalElement) {
    let title = event.submitter.getAttribute("data-bs-title");
    let modalMessage = modalElement.querySelector(".modal-body p");
    modalMessage.innerHTML = title;
}

function setEventListenerOnModalButtons(deleteConfirmationModal, deleteForm) {
    let closeButton = document.getElementById("modal-close-button");
    closeButton.addEventListener("click", () => {
        deleteConfirmationModal.hide();
    });

    let deleteButton = document.getElementById("delete-button");
    deleteButton.addEventListener("click", () => {
        deleteForm.submit();
    });
}
