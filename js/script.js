(function($) {
	"use strict";

	$(".history-scroller").niceScroll({
		cursorwidth: "10px",
		background: "#0d1015",
		cursorborder: "0",
		cursorborderradius: "0",
		autohidemode: false,
		zindex: 5
	});

	// testimonial-slider
	$('.testimonials').slick({
		dots: true,
		infinite: true,
		speed: 300,
		arrows: false,
		adaptiveHeight: true,
		
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
	
	animatedProgressBar();
	windowHieght();
	previewPannel();

	function animatedProgressBar () {
		$(".progress").each(function() {
			var skillValue = $(this).find(".skill-lavel").attr("data-skill-value");
			$(this).find(".bar").animate({
				width: skillValue
			}, 1500);

			$(this).find(".skill-lavel").text(skillValue);
		});
	}

	function windowHieght(){
		if ( $(window).height() <=768 ) {
			$(".pt-table").addClass("desktop-768");
		} else {
			$(".pt-table").removeClass("desktop-768");
		}
	}

	/*----------------------------------------
		Isotope Masonry
	------------------------------------------*/
	function isotopeMasonry() {
		$(".isotope-gutter").isotope({
			itemSelector: '[class^="col-"]',
			percentPosition: true
		});
		$(".isotope-no-gutter").isotope({
			itemSelector: '[class^="col-"]',
			percentPosition: true,
			masonry: {
				columnWidth: 1
			}
		});

		$(".filter a").on("click", function(){
			$(".filter a").removeClass("active");
			$(this).addClass("active");
			var selector = $(this).attr("data-filter");
			$(".isotope-gutter").isotope({
					filter: selector,
					animationOptions: {
					duration: 750,
					easing: "linear",
					queue: false
				}
			});
			return false;
		});
	}

	/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		Preview Pannel
	-=-=-=-=-=-=-=-=-=--=-=-=-=-=-*/
	function previewPannel() {
		$(".switcher-trigger").on("click", function() {
			$(".preview-wrapper").toggleClass("extend");
			return false;
		});
		if ($(window).width() < 768 ) {            
			//$(".preview-wrapper").removeClass("extend");
		}
		$(".color-options li").on("click", function(){			
			$("#color-changer").attr({
				"href":"css/colors/"+$(this).attr("data-color")+".css"
			});
			return false;
		});
	}
	
	$(window).on("load", function() {
		isotopeMasonry();

		$(".preloader").addClass("active");
		setTimeout(function () {
			$(".preloader").addClass("done");
		}, 1000);
	});

})(jQuery);


// Ambil data dari API PHP
fetch('/php/api.php')
    .then(response => response.json())
    .then(data => {
        const homeData = data.home;
        const biodataData = data.biodata;
        const pendidikanData = data.pendidikan;

        // Tampilkan data ke dalam HTML (misalnya, di dalam elemen dengan ID tertentu)
        const homeContainer = document.getElementById('home-data');
        const biodataContainer = document.getElementById('biodata-data');
        const pendidikanContainer = document.getElementById('pendidikan-data');

        // Menampilkan Data
        homeData.forEach(item => {
            homeContainer.innerHTML += `
                <p>ID: ${item.id}</p>
                <p>Nama Depan: ${item.namaDepan}</p>
                <p>Nama Belakang: ${item.namaBelakang}</p>
                <p>Deskrips Panjangi: ${item.deskripsiPanjang}</p>
                <p>Biodata Singkat: ${item.biodataSingkat}</p>
            `;
        });

		biodataData.forEach(item =>{
			biodataContainer.innerHTML +=`
			<p>ID: ${item.id}</p>
			<p>Tanggal Lahir: ${item.tanggalLahir}</p>
			<p>Pemahaman Bahasa: ${item.pemahamanBahasa}</p>
			<p>Keahlian: ${item.bidangKeahlian}</p>
			<p>Freelance: ${item.ketersediaanFreelance}</p
			<p>Deskripsi Singkat: ${item.deskripsiSingkat}</p>
			`;
		});

		pendidikanData.forEach(item =>{
			pendidikanContainer.innerHTML +=`
			<p>ID: ${item.id}</p>
			<p>Nama Instansi: ${item.namaInstansi}</p>
			<p>Jelang Periode: ${item.jelangPeriode}</p>
			<p>Deskripsi Pendidikan: ${item.deskripsiPendidikan}</p>
			`;
		});

    })
    .catch(error => console.error('Kesalahan:', error));
