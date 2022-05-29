function NameCard() {
    return (
        <div className='name-card'>
            <div className='name'>Name: Alice</div>
            <div className='age'>Age: 20</div>
        </div>
    )
}
ReactDOM.render(<div>
    <NameCard />
    <NameCard />
    <NameCard />
    <NameCard />
</div>, document.getElementById("app"))
