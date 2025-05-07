$(document).ready(function () {
    const header_logo_mobo = document.getElementById("header_logo_mobo");
    $(".hamburger_menu").click(function () {
        $(".header_mobo_main_slide").fadeIn("slow");
        $(".hamburger_menu").fadeOut("slow");
        $(".hamburger_menu_close").fadeIn("slow");
        $(".header_cart_mobo_main_slide").fadeOut("slow");
        $(".header_mobo_main").css("background-color", "#FFFFFF");
        header_logo_mobo.src = "frontend/BrandSparkz/assets/img/header_mobo_bg_dark_logo.svg";
    });
    $(".hamburger_menu_close").click(function () {
        $(".cart_menu").fadeIn("slow");
        if ($(".header_cart_mobo_main_slide").css("display") != "none") {
            $(".header_mobo_main_slide").fadeIn("slow");
            $(".header_cart_mobo_main_slide").fadeOut("slow");
        } else {
            $(".hamburger_menu").fadeIn("slow");
            $(".header_mobo_main_slide").fadeOut("slow");
            $(".hamburger_menu_close").fadeOut("slow");
        }
        $(".header_mobo_main").css("background-color", "transparent");
        header_logo_mobo.src = "frontend/BrandSparkz/assets/img/header_mobo_bg_trans_logo_.svg";
    });
    $(".cart_menu").click(function () {
        $(".header_cart_mobo_main_slide").fadeIn("slow");
        $(".header_mobo_main_slide").fadeOut("slow");
    });
});

function closeMobileCart() {
    if ($(".header_cart_mobo_main_slide").css("display") != "none") {
        $(".header_cart_mobo_main_slide").fadeOut("slow");
        $(".header_mobo_main_slide").fadeIn("slow");
    } else {
        $(".header_mobo_main_slide").fadeOut("slow");
        $(".hamburger_menu").fadeIn("slow");
        $(".hamburger_menu_close").fadeOut("slow");
    }
}
function justDrop(droperId, roterId, element) {
    const theId = document.getElementById(droperId);
    const theId2 = document.getElementById(roterId);

    if (screen.width < 700) {
        if (element.style.backgroundColor != "rgb(238, 89, 33)") {
            theId.classList.remove('d-none');
            theId2.style.rotate = '180deg';
            element.style.backgroundColor = "#EE5921";
            element.style.color = "#fff";
            element.style.borderRadius = "3px";
            theId2.querySelector("path").setAttribute("stroke", "#FFF");
        } else {
            theId.classList.add('d-none');
            theId2.style.rotate = '0deg';
            element.style.backgroundColor = "unset";
            element.style.color = "#3C3C3C";
            element.style.borderRadius = "3px";
            theId2.querySelector("path").setAttribute("stroke", "#3C3C3C");
        }
    } else {
        if (theId.classList.contains('d-none')) {
            theId.classList.remove('d-none');
            theId2.style.rotate = '180deg';
        } else {
            theId.classList.add('d-none');
            theId2.style.rotate = '0deg';
        }
    }
}

//const images = [
   // './assets/img/owl_seo.png',
    //'./assets/img/owl_ppc.png',
    //'./assets/img/owl_orm.png',
    //'./assets/img/owl_wdd.png',
    //'./assets/img/owl_em.png',
    //'./assets/img/owl_smm.png'
//]
//const hover_card_images = [
  //  './assets/img/cut_seo.png',
    //'./assets/img/cut_ppc.png',
    //'./assets/img/cut_orm.png',
    //'./assets/img/cut_wdd.png',
    //'./assets/img/cut_em.png',
    //'./assets/img/cut_smm.png'
//]
//const videos = [
  //  './assets/img/hs1_vid_seo.mp4',
   // './assets/img/hs1_vid_ppc.mp4',
   // './assets/img/hs1_vid_orm.mp4',
    //'./assets/img/hs1_vid_wdd.mp4',
    //'./assets/img/hs1_vid_em.mp4',
    //'./assets/img/hs1_vid_smm.mp4',
//]
//const videos_mob = [
  //  './assets/img/hs1_vid_seo_mob.mp4',
    //'./assets/img/hs1_vid_ppc_mob.mp4',
    //'./assets/img/hs1_vid_orm_mob.mp4',
    //'./assets/img/hs1_vid_wdd_mob.mp4',
    //'./assets/img/hs1_vid_em_mobo.mp4',
    //'./assets/img/hs1_vid_smm_mob.mp4',
//]
document.addEventListener('DOMContentLoaded', function() {
const images = [
    "frontend/BrandSparkz/assets/img/owl_seo.png",
    "frontend/BrandSparkz/assets/img/owl_ppc.png",
    "frontend/BrandSparkz/assets/img/owl_orm.png",
    "frontend/BrandSparkz/assets/img/owl_wdd.png",
    "frontend/BrandSparkz/assets/img/owl_em.png",
    "frontend/BrandSparkz/assets/img/owl_smm.png"
];

const hover_card_images = [
    "frontend/BrandSparkz/assets/img/cut_seo.png",
    "frontend/BrandSparkz/assets/img/cut_ppc.png",
    "frontend/BrandSparkz/assets/img/cut_orm.png",
    "frontend/BrandSparkz/assets/img/cut_wdd.png",
    "frontend/BrandSparkz/assets/img/cut_em.png",
    "frontend/BrandSparkz/assets/img/cut_smm.png"
];

const videos = [
    "frontend/BrandSparkz/assets/img/hs1_vid_seo.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_ppc.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_orm.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_wdd.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_em.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_smm.mp4"
];

const videos_mob = [
    "frontend/BrandSparkz/assets/img/hs1_vid_seo_mob.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_ppc_mob.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_orm_mob.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_wdd_mob.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_em_mobo.mp4",
    "frontend/BrandSparkz/assets/img/hs1_vid_smm_mob.mp4"
];
    const text_array = [
        'Search Engine Optimization',
        'Pay-Per-Click',
        'Online Reputation managment',
        'Web Design & Web Development',
        'Email Marketing',
        'Social Media Management',
    ]
    const crd_text_array = [
        'SEO',
        'PPC',
        'ORM',
        'UI/UX',
        'Email',
        'Social',
    ]
    
    const routeMap = {  
        'Search Engine Optimization': "seo",
        'Pay-Per-Click': "ppc",
        'Online Reputation management': "orm",
        'Web Design & Web Development': "wdd",
        'Email Marketing': "em",
        'Social Media Management': "social"
    };

    // Your slider code
    let index = 0;
    const imgElements = document.querySelectorAll('.owl_image');

    function updateSlider() {
        imgElements.forEach((img, i) => {
            img.classList.remove('show');
            setTimeout(() => {
                if (screen.width > 700) {
                    let items = document.querySelectorAll('.hs1_slider_disc_div .hs1_slide_disc');
                    items.forEach(item => item.classList.remove('active'));
                    items[index].classList.add('active');

                    img.src = images[(index + i) % images.length];
                    $(".hs1_element_card_image").attr("src", hover_card_images[index]);

                    $(".slide_btm_trix_txt").text(text_array[index]);
                    $(".hs1_ele_crd_pill_txt").text(crd_text_array[index]);

                    var index_val = index + 1;
                    $('.index_pos span').text('0' + index_val);
                    
                    $(".circ_btn, .btn_ark_arr, .btn_mob_ark").off("click").on("click", function () {
                        const currentText = $(".slide_btm_trix_txt , .navitrix_text").text().trim(); // Get current text
                        const route = routeMap[currentText]; // Look up the route
                        if (route) {
                            window.location.href = route; // Redirect to the route
                        } else {
                            console.error("No route found for:", currentText);
                        }
                    });

                    $("#hs1_vid_desk").fadeOut(100, function () {
                        $("#hs1_vid_desk source").attr("src", videos[index]);
                        this.load();
                        $("#hs1_vid_desk").fadeIn(500);
                    });

                } else {
                    let items = document.querySelectorAll('.hs1_slider_disc_div_mob .hs1_slide_disc_mob');
                    items.forEach(item => item.classList.remove('active'));
                    items[index].classList.add('active');

                    $(".navitrix_text").text(crd_text_array[index]);

                    $("#hs1_vid_mobo").fadeOut(100, function () {
                        $("#hs1_vid_mobo source").attr("src", videos_mob[index]);
                        this.load();
                        $("#hs1_vid_mobo").fadeIn(500);
                    });
                }

                img.classList.add('show');
            }, 500);
        });
    }

    function showNext() {
        index = (index + 1) % images.length;
        updateSlider();
    }

    function showPrev() {
        index = (index - 1 + images.length) % images.length;
        updateSlider();
    }

    document.querySelector('.right-btn').addEventListener('click', showNext);
    document.querySelector('.left-btn').addEventListener('click', showPrev);
    document.querySelector('.right-btn_mob').addEventListener('click', showNext);
    document.querySelector('.left-btn_mob').addEventListener('click', showPrev);

    // Auto-play
    updateSlider();
    let sliderInterval = setInterval(showNext, 5000);
});




$(document).ready(function () {
                const a = document.querySelectorAll(".service_table tbody tr td:nth-child(2)");
                const c = document.querySelectorAll(".service_table tbody tr td:last-child");
                const d = document.querySelectorAll(".service_table tbody tr:first-child td");
                const e = document.querySelectorAll(".service_table tbody tr:last-child td");
                const f = document.querySelectorAll(".service_table tbody tr td:last-child");
                a.forEach(x => {
                    const b = document.createElement("div");
                    b.className = "white_box";
                    x.appendChild(b);
                })
                c.forEach(x => {
                    const b = document.createElement("div");
                    b.className = "white_box2";
                    x.appendChild(b);
                })
                d.forEach(x => {
                    const b = document.createElement("div");
                    b.className = "image_box";
                    x.appendChild(b);
                })
                e.forEach(x => {
                    const b = document.createElement("div");
                    b.className = "image_box2";
                    x.appendChild(b);
                })
                f.forEach(x => {
                    const b = document.createElement("div");
                    b.className = "image_box3";
                    const height = x.offsetHeight;
                    b.style.height = height + "px";
    
                    
                    x.appendChild(b);
                })
    
            }
            )


$(document).ready(function () { 
    let lastScrollTop = 1; 
    const navbar = document.getElementById('header'); 
    const header_logo = document.getElementById("header_logo");
    const header_logo_mobo = document.getElementById("header_logo_mobo");
    const roter1 = document.getElementById("roter1");
    const roter2 = document.getElementById("roter2");
    
    // navbar.classList.add('navbar-sticky'); 
    $(document).scroll(function () { 
        let scroll_pos = $(this).scrollTop(); // Get current scroll position 
        if (scroll_pos > lastScrollTop) { // Scrolling down 
            navbar.classList.add('white_header'); 
            // console.log(header_logo);
             header_logo.src = "frontend/BrandSparkz/assets/img/header_bg_dark_logo.svg";
            
            roter1.src = "frontend/BrandSparkz/assets/img/drop.svg";
            roter2.src = "frontend/BrandSparkz/assets/img/drop.svg";
            if (screen.width < 700) {
                header_logo_mobo.src = "frontend/BrandSparkz/assets/img/header_mobo_bg_dark_logo.svg";
            }
            // console.log(header_logo);
            // header_logo.attr('src', "{{ asset('frontend/BrandSparkz/assets/img/header_bg_trans_logo_.svg') }}");
        } 
        else { // Scrolling up (even 1px) 
            navbar.classList.remove('white_header'); 
            // console.log(header_logo);
            header_logo.src = "frontend/BrandSparkz/assets/img/header_bg_trans_logo_.svg";
            roter1.src = "frontend/BrandSparkz/assets/img/drop_white.svg";
            roter2.src = "frontend/BrandSparkz/assets/img/drop_white.svg";
            if (screen.width < 700) {
                header_logo_mobo.src = "frontend/BrandSparkz/assets/img/header_mobo_bg_trans_logo_.svg";
            }
            // console.log(header_logo);
            // header_logo.attr('src', "{{ asset('frontend/BrandSparkz/assets/img/header_bg_dark_logo.svg') }}");
        } 
    // lastScrollTop = scroll_pos;
}); 
    
});


$(document).ready(function () {
        const buttons = document.querySelectorAll('.btn_global');

        buttons.forEach(button => {
            const img = button.querySelector('.btn_global_pattern');

            const originalSrc = "{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}";
            const hoverSrc = "{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern_dark.png') }}";

            button.addEventListener('mouseover', () => {
                img.src = hoverSrc;
            });

            button.addEventListener('mouseout', () => {
                img.src = originalSrc;
            });
        });
    });


// $(document).ready(function () {
// const buttons = document.querySelectorAll('.btn_global');

// buttons.forEach(button => {
//   const img = button.querySelector('.btn_global_pattern'); // Get the image inside this specific button

//   const originalSrc = "frontend/BrandSparkz/assets/img/btn_primary_pattern.png";
//   const hoverSrc = "frontend/BrandSparkz/assets/img/btn_primary_pattern_dark.png";

//   button.addEventListener('mouseover', () => {
//     img.src = hoverSrc;
//   });

//   button.addEventListener('mouseout', () => {
//     img.src = originalSrc;
//   });
// });
// })




// $(document).ready(function () {
// const buttons = document.querySelectorAll('.btn_global2');

// buttons.forEach(button => {
//   const img = button.querySelector('.btn_global_pattern2'); // Get the image inside this specific button

//   const originalSrc = "frontend/BrandSparkz/assets/img/btn_primary_pattern_dark.png";
//   const hoverSrc = "frontend/BrandSparkz/assets/img/btn_primary_pattern.png";

//   button.addEventListener('mouseover', () => {
//     img.src = hoverSrc;
//   });

//   button.addEventListener('mouseout', () => {
//     img.src = originalSrc;
//   });
// });

$(document).ready(function () {
        const buttons = document.querySelectorAll('.btn_global2');

        buttons.forEach(button => {
            const img = button.querySelector('.btn_global_pattern2');

            const originalSrc = "{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern_dark.png') }}";
            const hoverSrc = "{{ asset('frontend/BrandSparkz/assets/img/btn_primary_pattern.png') }}";

            button.addEventListener('mouseover', () => {
                img.src = hoverSrc;
            });

            button.addEventListener('mouseout', () => {
                img.src = originalSrc;
            });
        });
    });



})
