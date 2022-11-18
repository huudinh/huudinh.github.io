// - codepen.io
// - Phần JavaScript Preprocessor: chọn Babel
// - Phần Add External Scripts/Pens, chọn thêm 2 thư viện là react và react-dom
function NameCard() {
    return (
        <div>
            <div>Name: Alice</div>
            <div>Age: 20</div>
        </div>
    )
}
ReactDOM.render(<div>
    <NameCard />
</div>, document.getElementById("app"))
