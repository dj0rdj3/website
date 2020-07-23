const ImageArray = ['img1.JPG', 'img2.JPG', 'img3.JPG', 'img4.JPG', 'img5.JPG', 'img6.JPG', 'img7.JPG', 'img8.JPG', 'img9.JPG', 'img10.JPG', 'img11.JPG', 'img12.JPG', 'img13.JPG'];
const RandomNumber = Math.floor(Math.random() * 13);
const RandomImage = ImageArray[RandomNumber];

document.body.style.background = "linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(bg/" + RandomImage + ")";
document.body.style.backgroundSize = "cover";
document.body.style.backgroundRepeat = "no-repeat";

document.onreadystatechange = function() {
    if (document.readyState === 'complete') {
        let elmnt = document.getElementById('contact');
        elmnt.style.left = (document.body.clientWidth - elmnt.offsetWidth) / 2 + "px";
        elmnt.style.top = (document.body.clientHeight - elmnt.offsetHeight) / 2 + "px";
    }
}