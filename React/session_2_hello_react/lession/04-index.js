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
    <NameCard />
    <NameCard />
    <NameCard />
</div>, document.getElementById("app"))
