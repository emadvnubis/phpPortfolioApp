(function(){function n(e){var t=document.querySelector(".hero"),o=getComputedStyle(t).height.split("px")[0],s=document.querySelector(".navigation"),a=document.querySelector(".on_sticky"),c=document.querySelector(".scroll-top"),l=window.scrollY;l>o?(s.classList.add("is-fixed"),a.classList.add("notVisible"),c.classList.remove("hidden")):l<o&&(s.classList.remove("is-fixed"),c.classList.add("hidden"))}window.addEventListener("scroll",n);const r=()=>{const e=document.querySelectorAll(".nav-link");for(let t in e)e.hasOwnProperty(t)&&e[t].addEventListener("click",o=>{o.preventDefault(),document.querySelector(e[t].hash).scrollIntoView({behavior:"smooth"})})},i=()=>{const e=document.querySelectorAll(".scroll-spy");window.onscroll=()=>{const t=document.documentElement.scrollTop||document.body.scrollTop;for(let o in e)if(e.hasOwnProperty(o)&&e[o].offsetTop<=t){console.log(e.hasOwnProperty(o)+" "+e[o].offsetTop+" "+t);const s=e[o].id;document.querySelector(".active").classList.remove("active"),document.querySelector(`a[href*=${s}]`).parentNode.classList.add("active")}}};r(),i()})();
