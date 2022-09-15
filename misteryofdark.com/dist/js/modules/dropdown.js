const params = {
  btnClassName: "header-select__btn",
  activeClassName: "is-active",
  disabledClassName: "is-disabled"
}

function onDisable(evt) {
  if (evt.target.classList.contains(params.disabledClassName)) {
    evt.target.classList.remove(params.disabledClassName, params.activeClassName);
    evt.target.removeEventListener("animationend", onDisable);
  }
}

function setMenuListener() {
  document.body.addEventListener("click", (evt) => {
    const activeElements = document.querySelectorAll(`.${params.activeClassName}`);

    if (activeElements.length && !evt.target.closest(`.${params.activeClassName}`)) {
      activeElements.forEach((current) => {
        if (current.classList.contains(params.btnClassName)) {
          current.classList.remove(params.activeClassName);
        } else {
          current.classList.add(params.disabledClassName);
        }
      });
    }

    if (evt.target.closest(`.${params.btnClassName}`)) {
      const btn = evt.target.closest(`.${params.btnClassName}`);
      const path = btn.dataset.path;
      const drop = document.querySelector(`[data-target="${path}"]`);

      btn.classList.toggle(params.activeClassName);

      if (!drop.classList.contains(params.activeClassName)) {
        drop.classList.add(params.activeClassName);
        drop.addEventListener("animationend", onDisable);
      } else {
        drop.classList.add(params.disabledClassName);
      }
    }
  });
}

setMenuListener();


/*
    Не забываем как подключается ))

    HTML

  <ul class="main__list">
    <li class="main__item">
      <button class="main__item-btn" data-path="one">
        <strong class="main__item-heading">Реализм</strong>
        <span class="main__item-icon"></span>
      </button>
      <div class="main__dropdown" data-target="one">
        <div class="main__dropdown-wrap" data-simplebar>
          <ul class="main__drop-list">
            <li class="main__dropdown-item"><a href="" class="main__item-link main__item-tintoretto">Тинторрето</a></li>
            <li class="main__dropdown-item"><a href="" class="main__item-link main__item-fridrih">Фридрих</a></li>
            <li class="main__dropdown-item"><a href="" class="main__item-link main__item-leo">Леонардо</a></li>
            <li class="main__dropdown-item"><a href="" class="main__item-link main__item-tintoretto">Тинторрето</a></li>
            <li class="main__dropdown-item"><a href="" class="main__item-link main__item-tintoretto">Тинторрето</a></li>
            <li class="main__dropdown-item"><a href="" class="main__item-link main__item-tintoretto">Тинторрето</a></li>
          </ul>
        </div>
      </div>
    </li>
  </ul>

      CSS

  @keyframes dropdownOpen {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  @keyframes dropdownClose {
    from {
      opacity: 1;
    }
    to {
      opacity: 0;
    }
  }

  .main__dropdown.is-active {
    display: block;
    animation-name: dropdownOpen;
    animation-duration: 0.4s;
  }

  .main__dropdown.is-disabled {
    display: block;
    animation-name: dropdownClose;
    animation-duration: 0.4s;
  }
*/