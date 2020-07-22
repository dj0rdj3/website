// Pravim array svih slika - isto ko u PHP.
const ImageArray = ['img1.JPG', 'img2.JPG', 'img3.JPG', 'img4.JPG', 'img5.JPG', 'img6.JPG', 'img7.JPG', 'img8.JPG', 'img9.JPG', 'img10.JPG', 'img11.JPG', 'img12.JPG', 'img13.JPG'];
// Pravim random broj koji se mnozi sa 13 te moze da bude od 0 do 12 (Math.random pravi brojeve od 0 do 1 a nama treba od 0 do 12)
const RandomNumber = Math.floor(Math.random() * 13);
// Uzimam element iz arraya koji ima random index generisan od gornje funkcije - ImageArray je ime arraya a u [] je index (polozaj) elemenata pocevsi od 0
const RandomImage = ImageArray[RandomNumber];

// Namestamo CSS od body (backgroundImage) da bude url(bg/RandomImage[npr img3.JPG])
document.body.style.backgroundImage = "url(bg/" + RandomImage + ")";