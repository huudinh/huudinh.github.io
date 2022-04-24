import NameCard from "./6-NameCard";

const App = () => {
  return (
    <div>
        <NameCard name='Alice' age='20' address={{city: 'Hanoi'}} >
          <div>This is my inner Name card</div>
        </NameCard>
        <NameCard name='Bob' age='21' />
        <NameCard name='Cris' age='22' />
    </div>
  )
};

export default App;
