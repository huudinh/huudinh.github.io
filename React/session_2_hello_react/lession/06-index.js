function NameCard() {
    return (
        <div className='name-card'>
            <div className='name'>Name: Alice</div>
            <div className='age'>Age: 20</div>
        </div>
    )
}
ReactDOM.render(<div>
    <NameCard name="Alice" age="20" />
    <NameCard name="Bob" age="20" />
    <NameCard name="Cris" age="20" />
    <NameCard name="Daniel" age="20" />
</div>, document.getElementById("app"))
