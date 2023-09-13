import './bootstrap';

const btn_scrolltop = document.getElementById("boton_scrolltop")
      btn_scrolltop.addEventListener('click', () => {
        window.scrollTo(0, 0)
      })

    window.onscroll = () => {
      add_btn_scrolltop()
    }

    const add_btn_scrolltop = () => {
      if (window.scrollY < 300) {
        btn_scrolltop.classList.remove("boton_scroll_on")
      } else {
        btn_scrolltop.classList.add("boton_scroll_on")
      }
    }