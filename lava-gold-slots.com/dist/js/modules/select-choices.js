const headerSelectRegion = document.querySelector('.region-select'); // элемент choices

const choices = new Choices(headerSelectRegion, {
  searchEnabled: false,
  // classNames: {
  //   containerOuter: 'choices2',
  //     containerInner: 'choices__inner2',
  //     input: 'choices__input2',
  //     inputCloned: 'choices__input--cloned2',
  //     list: 'choices__list2',
  //     listItems: 'choices__list--multiple2',
  //     listSingle: 'choices__list--single2',
  //     listDropdown: 'choices__list--dropdown2',
  //     item: 'choices__item2',
  //     itemSelectable: 'choices__item--selectable2',
  //     itemDisabled: 'choices__item--disabled2',
  //     itemChoice: 'choices__item--choice2',
  //     placeholder: 'choices__placeholder2',
  //     group: 'choices__group2',
  //     groupHeading: 'choices__heading2',
  //     button: 'choices__button2',
  // },
});