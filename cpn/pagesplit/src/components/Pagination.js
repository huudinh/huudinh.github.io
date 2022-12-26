class Pagination {
    constructor({ count, index, setIndex, getAllData }) {
        this.index = index //Vị trí hiện tại
        this.getAllData = getAllData // hàm lấy tất cả danh sách
        this.setIndex = setIndex // hàm set vị trí index
        this.dataLength = count //  đếm số phần tử của pagination
        this.limit = this.dataLength < 6 ? this.dataLength : 6 // giới hạn số phần tử của pagination 
        this.count = this.limit + this.index - 1 >= this.dataLength ? this.dataLength : this.limit + this.index - 1 // giới hạn phần tử lớn nhất được render của pagination
        this.$container = document.createElement('ul')
        this.$container.id = 'page2'
        this.$container.classList.add('pagination')

        //nút về đầu
        this.$preBtnBegin = document.createElement('li')
        this.$preBtnBegin.className = `pagination__item ${this.index <= 1 || this.dataLength === 0 ? 'd-none' : ''}`
        this.$preBtnBegin.style.cursor = 'pointer'
        this.$preBtnBegin.addEventListener('click', () => {
            this.prePageBegin()
        })
        this.$preLinkBegin = document.createElement('span')
        this.$preLinkBegin.classList.add('page-link')
        this.$preLinkBegin.innerHTML = '&laquo;&laquo;'
   
        //nút Quay lại
        this.$preBtn = document.createElement('li')
        this.$preBtn.className = `pagination__item ${this.index <= 1 || this.dataLength === 0 ? 'd-none' : ''}`
        this.$preBtn.style.cursor = 'pointer'
        this.$preBtn.addEventListener('click', () => {
            this.prePage()
        })
        this.$preLink = document.createElement('span')
        this.$preLink.classList.add('page-link')
        this.$preLink.innerHTML = '&laquo;'

        //nút next
        this.$nextBtn = document.createElement('li')
        this.$nextBtn.className = `pagination__item ${this.index >= this.dataLength ?'d-none':''}`
        this.$nextBtn.style.cursor = 'pointer'
        this.$nextBtn.addEventListener('click', () => {
            this.nextPage()
        })
        this.$nextLink = document.createElement('span')
        this.$nextLink.classList.add('page-link')
        this.$nextLink.innerHTML = '&raquo;'

        //nút next End
        this.$nextBtnEnd = document.createElement('li')
        this.$nextBtnEnd.className = `pagination__item ${this.index >= this.dataLength ?'d-none':''}`
        this.$nextBtnEnd.style.cursor = 'pointer'
        this.$nextBtnEnd.addEventListener('click', () => {
            this.nextPageEnd()
        })
        this.$nextLinkEnd = document.createElement('span')
        this.$nextLinkEnd.classList.add('page-link')
        this.$nextLinkEnd.innerHTML = '&raquo;&raquo;'


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
        this.$preBtnBegin.appendChild(this.$preLinkBegin)

        this.$container.appendChild(this.$preBtn)
        this.$preBtn.appendChild(this.$preLink)

        //render số Phần tử 
        const numTemp = (number) => {
            this.$numBtn = document.createElement('li')
            this.$numBtn.className = `pagination__item ${this.index === number ? 'active' : ''}`

            this.$numLink = document.createElement('span')
            this.$numLink.classList.add('page-link')
            this.$numLink.setAttribute('role', 'button')
            this.$numLink.innerHTML = number

            this.$container.appendChild(this.$numBtn)
            this.$numBtn.appendChild(this.$numLink)
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
        this.$nextBtn.appendChild(this.$nextLink)

        this.$container.appendChild(this.$nextBtnEnd)
        this.$nextBtnEnd.appendChild(this.$nextLinkEnd)
        return this.$container
    }

}
export default Pagination