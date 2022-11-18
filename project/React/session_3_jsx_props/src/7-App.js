import NameCard from "./7-NameCard";
import Card from './Card';


const App = () => {
  return (
    <div>
      <Card>
        <NameCard name='Alice' age='20' address={{city: 'Hanoi'}} >
          <div>This is my inner Name card</div>
        </NameCard>
        <NameCard name='Bob' age='21' />
        <NameCard name='Cris' age='22' />
      </Card>
    </div>
  )
};

export default App;
