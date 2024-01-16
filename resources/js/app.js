import './bootstrap';

const image = document.querySelector("#profileImage");
const imagePreview = document.querySelector("#profileImagePreview");
const fileReader = new FileReader()

image?.addEventListener("change", ({target}) => {
    
    fileReader.onload = e =>
    {
        imagePreview.classList.remove("hidden");
        imagePreview.src = fileReader.result;
    }
    
    fileReader.readAsDataURL(target.files[0]);
});