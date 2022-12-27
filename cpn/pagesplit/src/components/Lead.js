import { getLead } from "../apis/lead.js"
import LeadList from "./LeadList.js";
import Pagination from "./Pagination.js";

class Lead {
    index = 1
    constructor() {
        this.$dataTable = document.createElement('div')
        this.$dataTable.className = `dataTable`;
        this.$table = document.createElement('div')
        this.$pagiBox = document.createElement('div')
        this.$pagiBox.className = `dataTable__page`
        this.getAllLead()
    }

    setIndex = (index) => {
        this.index = index
    }

    getAllLead = async () => {
        try {
            const res = await getLead({
                pageNum: this.index,
            })

            this.$leadList = new LeadList({ data: res.render })
            this.$pagination = new Pagination({ count: res.pageCount, index: this.index, setIndex: this.setIndex, getAllData: this.getAllLead })

            if (res.pageCount === 0) {
                this.$table.className = 'text-center';
                this.$table.innerHTML = 'Không có dữ liệu';
                this.$pagiBox.innerHTML = ''
                return
            }
            this.$table.innerHTML = ''
            this.$table.className = 'dataTable__list';
            this.$table.appendChild(this.$leadList.render());

            this.$pagiBox.innerHTML = ''
            this.$pagiBox.appendChild(this.$pagination.render());

        } catch (e) {
            console.log(e);
            return
        }
    }

    render() {
        this.$dataTable.appendChild(this.$table);
        this.$dataTable.appendChild(this.$pagiBox);
        return this.$dataTable;
    }
}
export default Lead