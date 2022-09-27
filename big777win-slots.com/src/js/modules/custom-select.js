// скрипт для селектов
document.querySelectorAll('.dropdown').forEach((select) => {

  const dropDownCurrent = select.querySelector('.dropdown__current');
  const dropDownList = select.querySelector('.dropdown__list');
  const dropDownItem = dropDownList.querySelectorAll('.dropdown__list-item');

  const dropDownTitle = select.querySelector('.dropdown__title');


  dropDownCurrent.addEventListener('click', (e) => {
    e.preventDefault();
    e.stopPropagation();
    dropDownCurrent.classList.toggle('active');
    dropDownCurrent.parentNode.classList.toggle('_active');
    dropDownList.classList.toggle('active');
  });

  dropDownItem.forEach((item) => {
    item.addEventListener('click', (e) => {

      e.stopPropagation();
      dropDownCurrent.innerText = item.querySelector('span').innerText;
      dropDownCurrent.focus();
      dropDownList.classList.remove('active');
      dropDownCurrent.classList.remove('active');
      dropDownCurrent.parentNode.classList.remove('_active');

      dropDownItem.forEach((e) => {
        e.classList.remove('active');
      });

      item.classList.add('active');

    });
  });

  document.addEventListener('click', (e) => {
    if (e.target !== dropDownCurrent) {
      dropDownList.classList.remove('active');
      dropDownCurrent.classList.remove('active');
      dropDownCurrent.parentNode.classList.remove('_active');
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Tab' || e.key === 'Escape') {
      dropDownList.classList.remove('active');
      dropDownCurrent.classList.remove('active');
      dropDownCurrent.parentNode.classList.remove('_active');
    }
  });

});



/* 

                   HTML

<div class="catalog-filter__dropdown dropdown">
<button class="dropdown__current">Выберите коллекцию</button>
<div class="dropdown__list">
    <label class="dropdown__list-item">
        <input type="radio" name="select-1">
        <span>Красный</span>
    </label>
    <label class="dropdown__list-item">
        <input type="radio" name="select-1">
        <span>Синий</span>
    </label>
    <label class="dropdown__list-item">
        <input type="radio" name="select-1">
        <span>Желтый</span>
    </label>
</div>
</div> 


               CSS

               .dropdown {
  max-width: 100%;
  width: 100%;
  position: relative
}

.dropdown::before {
  content: "";
  position: absolute;
  display: block;
  width: 16px;
  height: 8px;
  right: 12px;
  background: url(../img/icons/dropdown-arrow.svg) no-repeat center/100%;
  -webkit-transition: -webkit-transform ease .2s;
  transition: -webkit-transform ease .2s;
  -o-transition: transform ease .2s;
  transition: transform ease .2s;
  transition: transform ease .2s, -webkit-transform ease .2s;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%)
}

.dropdown._active::before {
  -webkit-transform: translateY(-50%) rotate(180deg);
  -ms-transform: translateY(-50%) rotate(180deg);
  transform: translateY(-50%) rotate(180deg);
  -webkit-transform-origin: center;
  -ms-transform-origin: center;
  transform-origin: center
}

.dropdown__current {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  height: 41px;
  background: #FBFBFB;
  border: 1px solid #4D4D4D;
  font-weight: 300;
  font-size: 16px;
  line-height: 130%;
  letter-spacing: 0.03em;
  color: rgba(77, 77, 77, 0.8);
  padding: 0 10px
}

.dropdown__list {
  overflow: hidden;
  display: none;
  position: absolute;
  background-color: #eee;
  width: 100%;
  top: -webkit-calc(100% - 0px);
  top: calc(100% - 0px);
  left: 0;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  margin: 0;
  z-index: 999
}

.dropdown__list.active {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex
}

.dropdown__list-item {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  cursor: pointer;
  height: 41px;
  border: 1px solid #4D4D4D;
  border-top: none
}

.dropdown__list-item:hover span {
  background: #4D4D4D;
  color: #ddd
}

.dropdown__list-item span {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  height: 100%;
  font-weight: 300;
  font-size: 16px;
  line-height: 130%;
  letter-spacing: 0.03em;
  color: rgba(77, 77, 77, 0.8);
  -webkit-transition: all ease-in .1s;
  -o-transition: all ease-in .1s;
  transition: all ease-in .1s;
  padding: 0 10px
}

.dropdown__list-item input {
  width: 0;
  height: 0;
  font-size: 0;
  opacity: 0
}

.dropdown__list-item input:checked+span {
  background: #202027;
  color: #eee
}


*/