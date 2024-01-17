const fileReader = new FileReader();

const handleImageLoader = ({ target }) =>
{
    fileReader.onload = () =>
    {
        document.querySelector("#imagePreview").src = fileReader.result;
    }
    fileReader.readAsDataURL(target.files[0]);
}

document.querySelector("#imageLoader").addEventListener("change", handleImageLoader);