class Pagination {
    constructor({ count, index, setIndex, getAllData }) {
        this.index = index //Vị trí hiện tại
        this.getAllData = getAllData // hàm lấy tất cả danh sách
        this.setIndex = setIndex // hàm set vị trí index
        this.dataLength = count //  đếm số phần tử của pagination
        this.limit = this.dataLength < 6 ? this.dataLength : 6 // giới hạn số phần tử của pagination 
        this.count = this.limit + this.index - 1 >= this.dataLength ? this.dataLength : this.limit + this.index - 1 // giới hạn phần tử lớn nhất được render của pagination
        this.$container = document.createElement('ul')
        this.$container.classList.add('pagination')

        //nút về đầu
        this.$preBtnBegin = document.createElement('li')
        this.$preBtnBegin.className = `pagination__item ${this.index <= 1 || this.dataLength === 0 ? 'd-none' : ''}`
        this.$preBtnBegin.addEventListener('click', () => {
            this.prePageBegin()
        })
        this.$preBtnBegin.innerHTML = '&laquo;&laquo;'
   
        //nút Quay lại
        this.$preBtn = document.createElement('li')
        this.$preBtn.className = `pagination__item ${this.index <= 1 || this.dataLength === 0 ? 'd-none' : ''}`
        this.$preBtn.addEventListener('click', () => {
            this.prePage()
        })
        this.$preBtn.innerHTML = '&laquo;'

        //nút next
        this.$nextBtn = document.createElement('li')
        this.$nextBtn.className = `pagination__item ${this.index >= this.dataLength ?'d-none':''}`
        this.$nextBtn.addEventListener('click', () => {
            this.nextPage()
        })
        this.$nextBtn.innerHTML = '&raquo;'

        //nút next End
        this.$nextBtnEnd = document.createElement('li')
        this.$nextBtnEnd.className = `pagination__item ${this.index >= this.dataLength ?'d-none':''}`
        this.$nextBtnEnd.addEventListener('click', () => {
            this.nextPageEnd()
        })
        this.$nextBtnEnd.innerHTML = '&raquo;&raquo;'
    }
    prePageBegin() {
        this.index = 1
        this.setIndex(this.index)
        this.getAllData()
    }
    prePage() {
        this.index = this.index <= 1 ? 1 : this.index - 1
        this.setIndex(this.index)
        this.getAllData()
    }
    nextPage() {
        this.index = this.index >= this.limit + this.index - 1 ? this.dataLength : this.index + 1
        this.setIndex(this.index)
        this.getAllData()
    }
    nextPageEnd() {
        this.index =  this.limit + 1
        this.setIndex(this.index)
        this.getAllData()
    }

    render() {
        this.$container.innerHTML = ''
        this.$container.appendChild(this.$preBtnBegin)
        this.$container.appendChild(this.$preBtn)

        //render số Phần tử 
        const numTemp = (number) => {
            this.$numBtn = document.createElement('li')
            this.$numBtn.className = `pagination__item ${this.index === number ? 'active' : ''}`
            this.$numBtn.innerHTML = number;

            this.$container.appendChild(this.$numBtn)
            this.$numBtn.addEventListener('click', () => {
                this.index = number
                this.setIndex(this.index)
                this.getAllData()
            })
        }
        for (let i = this.count === this.dataLength ? this.count - this.limit + 1 : this.index; i <= this.count; i++) {
            numTemp(i)
        }
        this.$container.appendChild(this.$nextBtn)
        this.$container.appendChild(this.$nextBtnEnd)
        return this.$container
    }

}
export default Pagination