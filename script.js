document.addEventListener("DOMContentLoaded", function() {
  const imageGallery = document.getElementById('image-gallery');

  // Replace 'images' with your actual folder path
  const folderPath = 'images/';

  // Fetch images from the folder
  fetch(`${folderPath}`)
    .then(response => response.text())
    .then(text => {
      const parser = new DOMParser();
      const htmlDoc = parser.parseFromString(text, 'text/html');
      const images = htmlDoc.getElementsByTagName('a');
      
      // Loop through each image and create image box with download button
      for (let image of images) {
        const imageUrl = image.getAttribute('href');
        const imageName = imageUrl.split('/').pop();

        const imageBox = document.createElement('div');
        imageBox.classList.add('image-box');

        const img = document.createElement('img');
        img.classList.add('image');
        img.src = `${folderPath}${imageUrl}`;
        img.alt = imageName;

        const downloadButton = document.createElement('button');
        downloadButton.classList.add('download-button');
        downloadButton.innerText = 'Download';
        downloadButton.onclick = () => {
          window.location.href = `${folderPath}${imageUrl}`;
        };

        imageBox.appendChild(img);
        imageBox.appendChild(downloadButton);
        imageGallery.appendChild(imageBox);
      }
    })
    .catch(error => console.error('Error fetching images:', error));
});
