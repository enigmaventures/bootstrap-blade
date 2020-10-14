# BootstrapBlade

[![Latest Version on Packagist](https://img.shields.io/packagist/v/enigma/bootstrap-blade.svg?style=flat-square)](https://packagist.org/packages/enigma/bootstrap-blade)
[![Quality Score](https://img.shields.io/scrutinizer/g/enigma/bootstrap-blade.svg?style=flat-square)](https://scrutinizer-ci.com/g/enigma/bootstrap-blade)
[![Total Downloads](https://img.shields.io/packagist/dt/enigma/bootstrap-blade.svg?style=flat-square)](https://packagist.org/packages/enigma/bootstrap-blade)

Bootstrap as Blade view components!

## Installation

You can install the package via composer:

```bash
composer require enigma/bootstrap-blade
```

## Usage

``` php
<x-bs-component-kebab-name>
    Content goes here...
</x-bs-component-kebab-name>
```

For self-closing components, you can also write them like this:

``` php
<x-bs-component-kebab-name/>
```

Note: Some attributes might also be required for a component to work. Please check the corresponding component class.

## Components

Here's the complete list of all the available components:

(Note: Components not listed here but are present in src/Components are for internal use only.)

+ [Accordion](./src/Components/Accordion.php)
+ [Alert](./src/Components/Alert.php)
+ [AlertLink](./src/Components/AlertLink.php)
+ [Badge](./src/Components/Badge.php)
+ [Blockquote](./src/Components/Blockquote.php)
+ [BlockquoteFooter](./src/Components/BlockquoteFooter.php)
+ [Breadcrumb](./src/Components/Breadcrumb.php)
+ [BreadcrumbItem](./src/Components/BreadcrumbItem.php)
+ [Button](./src/Components/Button.php)
+ [ButtonGroup](./src/Components/ButtonGroup.php)
+ [ButtonToolbar](./src/Components/ButtonToolbar.php)
+ [Card](./src/Components/Card.php)
+ [CardBody](./src/Components/CardBody.php)
+ [CardColumns](./src/Components/CardColumns.php)
+ [CardDeck](./src/Components/CardDeck.php)
+ [CardFooter](./src/Components/CardFooter.php)
+ [CardGroup](./src/Components/CardGroup.php)
+ [CardHeader](./src/Components/CardHeader.php)
+ [CardImage](./src/Components/CardImage.php)
+ [CardImageOverlay](./src/Components/CardImageOverlay.php)
+ [CardLink](./src/Components/CardLink.php)
+ [CardSubtitle](./src/Components/CardSubtitle.php)
+ [CardText](./src/Components/CardText.php)
+ [CardTitle](./src/Components/CardTitle.php)
+ [Carousel](./src/Components/Carousel.php)
+ [CarouselCaption](./src/Components/CarouselCaption.php)
+ [CarouselIndicators](./src/Components/CarouselIndicators.php)
+ [CarouselInner](./src/Components/CarouselInner.php)
+ [CarouselItem](./src/Components/CarouselItem.php)
+ [CarouselNext](./src/Components/CarouselNext.php)
+ [CarouselPrevious](./src/Components/CarouselPrevious.php)
+ [CheckboxField](./src/Components/CheckboxField.php)
+ [CloseIcon](./src/Components/CloseIcon.php)
+ [Collapse](./src/Components/Collapse.php)
+ [CollapseButton](./src/Components/CollapseButton.php)
+ [Column](./src/Components/Column.php)
+ [Container](./src/Components/Container.php)
+ [CustomCheckbox](./src/Components/CustomCheckbox.php)
+ [CustomFile](./src/Components/CustomFile.php)
+ [CustomInput](./src/Components/CustomInput.php)
+ [CustomLabel](./src/Components/CustomLabel.php)
+ [CustomRadio](./src/Components/CustomRadio.php)
+ [CustomRange](./src/Components/CustomRange.php)
+ [CustomSelect](./src/Components/CustomSelect.php)
+ [CustomSwitch](./src/Components/CustomSwitch.php)
+ [Dropdown](./src/Components/Dropdown.php)
+ [DropdownButton](./src/Components/DropdownButton.php)
+ [DropdownDivider](./src/Components/DropdownDivider.php)
+ [DropdownHeader](./src/Components/DropdownHeader.php)
+ [DropdownItem](./src/Components/DropdownItem.php)
+ [DropdownItemText](./src/Components/DropdownItemText.php)
+ [DropdownMenu](./src/Components/DropdownMenu.php)
+ [DropdownToggle](./src/Components/DropdownToggle.php)
+ [EmailField](./src/Components/EmailField.php)
+ [Embed](./src/Components/Embed.php)
+ [EmbedItem](./src/Components/EmbedItem.php)
+ [Feedback](./src/Components/Feedback.php)
+ [Fieldset](./src/Components/Fieldset.php)
+ [Figure](./src/Components/Figure.php)
+ [FigureCaption](./src/Components/FigureCaption.php)
+ [FigureImage](./src/Components/FigureImage.php)
+ [FileField](./src/Components/FileField.php)
+ [Form](./src/Components/Form.php)
+ [FormButton](./src/Components/FormButton.php)
+ [FormCheck](./src/Components/FormCheck.php)
+ [FormGroup](./src/Components/FormGroup.php)
+ [FormRow](./src/Components/FormRow.php)
+ [FormText](./src/Components/FormText.php)
+ [Image](./src/Components/Image.php)
+ [InlineList](./src/Components/InlineList.php)
+ [InlineListItem](./src/Components/InlineListItem.php)
+ [Input](./src/Components/Input.php)
+ [InputGroup](./src/Components/InputGroup.php)
+ [InputGroupAddon](./src/Components/InputGroupAddon.php)
+ [InputGroupAppend](./src/Components/InputGroupAppend.php)
+ [InputGroupPrepend](./src/Components/InputGroupPrepend.php)
+ [InputGroupText](./src/Components/InputGroupText.php)
+ [Jumbotron](./src/Components/Jumbotron.php)
+ [Label](./src/Components/Label.php)
+ [Lead](./src/Components/Lead.php)
+ [Legend](./src/Components/Legend.php)
+ [ListGroup](./src/Components/ListGroup.php)
+ [ListGroupItem](./src/Components/ListGroupItem.php)
+ [Media](./src/Components/Media.php)
+ [MediaBody](./src/Components/MediaBody.php)
+ [Modal](./src/Components/Modal.php)
+ [ModalBody](./src/Components/ModalBody.php)
+ [ModalButton](./src/Components/ModalButton.php)
+ [ModalContent](./src/Components/ModalContent.php)
+ [ModalDialog](./src/Components/ModalDialog.php)
+ [ModalFooter](./src/Components/ModalFooter.php)
+ [ModalHeader](./src/Components/ModalHeader.php)
+ [ModalTitle](./src/Components/ModalTitle.php)
+ [Nav](./src/Components/Nav.php)
+ [Navbar](./src/Components/Navbar.php)
+ [NavbarBrand](./src/Components/NavbarBrand.php)
+ [NavbarCollapse](./src/Components/NavbarCollapse.php)
+ [NavbarNav](./src/Components/NavbarNav.php)
+ [NavbarText](./src/Components/NavbarText.php)
+ [NavbarToggler](./src/Components/NavbarToggler.php)
+ [NavbarTogglerIcon](./src/Components/NavbarTogglerIcon.php)
+ [NavItem](./src/Components/NavItem.php)
+ [NavItemLink](./src/Components/NavItemLink.php)
+ [NavLink](./src/Components/NavLink.php)
+ [PageItem](./src/Components/PageItem.php)
+ [PageItemLink](./src/Components/PageItemLink.php)
+ [PageLink](./src/Components/PageLink.php)
+ [Pagination](./src/Components/Pagination.php)
+ [PasswordField](./src/Components/PasswordField.php)
+ [Progress](./src/Components/Progress.php)
+ [ProgressBar](./src/Components/ProgressBar.php)
+ [RadioField](./src/Components/RadioField.php)
+ [RangeField](./src/Components/RangeField.php)
+ [Row](./src/Components/Row.php)
+ [Select](./src/Components/Select.php)
+ [SelectField](./src/Components/SelectField.php)
+ [SessionMessage](./src/Components/SessionMessage.php)
+ [Spinner](./src/Components/Spinner.php)
+ [SrOnly](./src/Components/SrOnly.php)
+ [Table](./src/Components/Table.php)
+ [Textarea](./src/Components/Textarea.php)
+ [TextareaField](./src/Components/TextareaField.php)
+ [TextField](./src/Components/TextField.php)
+ [Toast](./src/Components/Toast.php)
+ [ToastBody](./src/Components/ToastBody.php)
+ [ToastHeader](./src/Components/ToastHeader.php)
+ [UnstyledList](./src/Components/UnstyledList.php)

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email reyberyturiaga@gmail.com instead of using the issue tracker.

## Credits

- [Reyber Ian E. Yturiaga](https://github.com/reyberyturiaga)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
