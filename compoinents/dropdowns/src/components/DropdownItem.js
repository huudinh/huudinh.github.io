class DropdownItem {
    $container;
    $item;
    setStatus
    constructor({ title, setStatus }) {
        this.setStatus = setStatus
        this.$container = document.createElement('li')
        this.$container.addEventListener('click', () => {
            this.setDropdown()
        })
        this.$item = document.createElement('button')
        this.$item.className = 'dropdown-item'
        this.$item.innerHTML = title
    }
    setDropdown = () => {
        this.setStatus(this.$item.innerHTML)
    }
    render() {
        this.$container.appendChild(this.$item)
        return this.$container
    }
}
export default DropdownItem