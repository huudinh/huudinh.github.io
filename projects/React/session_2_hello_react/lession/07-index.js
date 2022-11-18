function NameCard(props) {
    return (
        <div className='name-card'>
            <div className="name">Name: {props.name}</div>
            <div className="age">Age: {props.age}</div>
        </div>
    )
}
ReactDOM.render(<div>
    <NameCard name="Alice" age="20" />
    <NameCard name="Bob" age="21" />
    <NameCard name="Cris" age="22" />
    <NameCard name="Daniel" age="23" />
</div>, document.getElementById("app"))
// 1. setup nodejs
// 2. check version node -v
// 3. npx create-react-app session_2_hello_react
