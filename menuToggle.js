//Menu Toggle

function toggleMenu() {
    document.getElementById('primaryNav').classList.toggle("menu")
    x.style.float = x.style.float === "left" ? "" : "left"
}



let x = document.getElementById('hamburgerBtn')
x.onclick = toggleMenu

x.style.float = "left"



let urlString = document.location.href

let urlArray = urlString.split('/')

let pageHREF = urlArray[urlArray.length - 2]
 
let menu = document.querySelectorAll('ul#primaryNav li a')



if (pageHREF !== "") {
    
    let i;
    for (i=0; i < menu.length; i++) {
        let currentUrl = menu[i].getAttribute("href")
        
        let curlArray = currentUrl.split('/')
        let cpageHREF = curlArray[curlArray.length - 2]

        if (cpageHREF === pageHREF) {
            menu[i].parentNode.style.background = "#2E9BAF"
            if(menu[i].parentNode.parentNode.parentNode.tagName === 'LI') {
                menu[i].parentNode.parentNode.parentNode.style.background = "#2E9BAF"
            } else {
                menu[i].parentNode.className = ""
            }
        }else {
            menu[i].parentNode.className=""
        }
    }
}

//Lazy Load

function lazyLoad() {
   let options = {
       root: null,
       rootMargin: '0px',
       threshold: 0.5
   }

   const observer = new IntersectionObserver(imageObserver, options)

   function imageObserver(entries, observer) {
       entries.forEach(entry => {
           if(entry.intersectionRatio > 0 && entry.isIntersecting){
               const img = entry.target
               const img_src = img.dataset.src
               console.log('lazy loading', img)
               img.src = img_src

               observer.unobserve(img)
           }
       })
   }

   let imgs = document.querySelectorAll('.serviceAreaImg')

   imgs.forEach(img => {
       observer.observe(img)
   })
}

lazyLoad()



