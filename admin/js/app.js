const imagePreview = document.getElementById('img-preview');
const imageUploader = document.getElementById('img-uploader');

const CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/penpen/image/upload';
const CLOUDINARY_UPLOAD_PRESET = 'rbd6ygnc';

imageUploader.addEventListener('change', async (e) => {

    const file = e.target.files[0];
    const formData = new FormData();
    formData.append('file', file);
    formData.append('upload_preset', CLOUDINARY_UPLOAD_PRESET);

	const res = await axios.post(CLOUDINARY_URL, formData, {
		headers: {
			'Content-Type': 'multipart/form-data'
		}
	})
	console.log(res);
    imagePreview.src = res.data.secure_url;
});