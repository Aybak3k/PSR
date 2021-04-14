// adding functionality to arrows
let arrIndex = 0
const arrImgs = ["images/psrnandanamelevations_/front 03.jpg", "images/krish-kamal-images/2.jpeg"]
const arrTitles = ["PSR NANDANAM", "Krish Kamal"]
const arrPs = ["Nandanam is an on-going project of 44 luxurious villaments located in Devanahalli, Bengaluru. These unique architectural designs have been crafted with the right blend of innovation, creativity, and luxury.", "Krish Kamal is an on-going project of 44 luxurious villaments located in Devanahalli, Bengaluru. These unique architectural designs have been crafted with the right blend of innovation, creativity, and luxury."]
const arrTargetImg = document.querySelector('#arrTargetImg')
const arrTargetTitle  = document.querySelector('#arrTargetTitle')
const arrTargetP  = document.querySelector('#arrTargetP')

const arrSwitch = _ => {
    if (arrIndex === 1) {
        arrIndex = 0
    } else if (arrIndex === 0) {
        arrIndex = 1
    }
    arrTargetImg.src = arrImgs[arrIndex]
    arrTargetTitle.textContent = arrTitles[arrIndex]
    arrTargetP.textContent = arrPs[arrIndex]
}



// place spouses image ont top
if (screen.width < 768) {
    document.querySelector('#top-image-container').innerHTML = `
        <div class="col-lg-8 col-md-8" style="padding: 0;">
            <img src="images/a.jpg" width="100%" >
        </div>
        <div class="col-lg-4 col-md-4" style="background-color: #006E4C;display:flex;align-items:center;justify-content:center;flex:1">
        <p class="display-6" style="color:white;font-family: 'Poppins', sans-serif; font-weight: 200">Building world class<br>
                living spaces for  <br>
                people with taste</p><br>
        </div>
        `
}

