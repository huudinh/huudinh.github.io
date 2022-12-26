import {LeadItem, Cell} from "./LeadItem.js"

class LeadList {
    constructor({ data }) {
        this.data = data
        this.$container = document.createElement('div')

        this.$theadTr = document.createElement('div')
        this.$theadTr.className = 'row dataTable__title'

        this.$name = new Cell('Họ và tên');
        this.$phoneNumber = new Cell('Điện thoại');
        this.$linkFb = new Cell('Link Facebook');
        this.$service = new Cell('Dịch vụ đăng ký');
        this.$branch = new Cell('Chi nhánh');
        this.$script = new Cell('Kịch bản');
        this.$interactive = new Cell('Tương tác');
        this.$note = new Cell('Ghi chú');

        this.$tbody = document.createElement('div');
        this.$tbody.className = 'dataTable__content';

        this.getAllLeads()
    }
    getAllLeads = () => {
        this.$tbody.innerHTML = ''
        for (let i = 0; i < this.data.length; i++) {
            this.$item = new LeadItem({
                ...this.data[i]
            })
            this.$tbody.appendChild(this.$item.render())
        }
        return this.$tbody
    }

    render() {
        this.$container.appendChild(this.$theadTr)
        this.$container.appendChild(this.$tbody)

        this.$theadTr.appendChild(this.$name.render());
        this.$theadTr.appendChild(this.$phoneNumber.render());
        this.$theadTr.appendChild(this.$linkFb.render());
        this.$theadTr.appendChild(this.$service.render());
        this.$theadTr.appendChild(this.$branch.render());
        this.$theadTr.appendChild(this.$script.render());
        this.$theadTr.appendChild(this.$interactive.render());
        this.$theadTr.appendChild(this.$note.render());

        return this.$container
    }
}
export default LeadList