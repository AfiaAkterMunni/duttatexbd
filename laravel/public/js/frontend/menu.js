// menu js start

function Menu(e) {
    let list = document.querySelector('ul');
    if (e.name === 'menu') {
      e.name = "close";
      list.classList.add('top-[76px]');
      list.classList.add('opacity-80');
    } else {
      e.name = "menu";
      list.classList.remove('top-[76px]');
      list.classList.remove('opacity-80');
    }
  }

// menu js end
