import NameCard from "./NameCard";
import Card from './Card';

function App() {
  return (
    <div>
      <Card>
        <NameCard name='Alice' age={20+1} address={{city: 'Hanoi'}} >
          <div>This is my inner Name card</div>
        </NameCard>
      </Card>
        <NameCard name='Bob' age='21' />
        <NameCard name='Cris' age='22' />
    </div>
  )
}

export default App;
