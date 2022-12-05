import DropdownItem from "./DropdownItem.js"

const statusList = [{
    name: 'Tất cả'
}, {
    name: 'Thành công'
}, {
    name: 'Outsold'
}, {
    name: 'Đang xử lý'
}, {
    name: 'Xác nhận'
}, {
    name: 'Chưa xác nhận'
}, {
    name: 'Khách không đến'
}, {
    name: 'Đặt cọc'
}, {
    name: 'Hủy'
}]

class Dropdown {
    $container
    $dropdownButon
    $dropdown
    $dropdownItem

    statusList

    constructor() {
        this.statusList = statusList || []
        this.$container = document.createElement('div')
        this.$container.className = 'dropdown'

        this.$dropdown = document.createElement('ul')
        this.$dropdown.className = 'dropdown-menu end-0 mt-2 w-100'

        this.renderDropdownItem()

        this.$dropdownButon = document.createElement('button')
        this.$dropdownButon.className = 'dropdown__button'

        this.$dropdownButon.innerHTML = 'Trạng thái'
        this.$dropdownButon.addEventListener('click', () => {
            this.$dropdown.classList.toggle('active')
        })

    }
    setStatus = (status) => {
        this.$dropdownButon.innerHTML = status
    }
    renderDropdownItem = () => {
        this.statusList.map(e => {
            this.$dropdownItem = new DropdownItem({ title: e.name, setStatus: this.setStatus })
            this.$dropdown.appendChild(this.$dropdownItem.render())
        })
        return this.$dropdown
    }
    render() {
        this.$container.appendChild(this.$dropdownButon)
        this.$container.appendChild(this.$dropdown)
        return this.$container
    }
}
export default Dropdown