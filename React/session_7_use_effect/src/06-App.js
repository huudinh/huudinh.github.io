import Counting from "./Counting";
import Scrolling from "./Scrolling";
import { useState } from "react";

function App() {
  const [scrollingVisible, setScrollingVisible] = useState(true);

  return (
    <div >
        <Counting />
        <hr></hr>
        <button
          onClick={ () =>{
            setScrollingVisible(!scrollingVisible)
          }}
        >
          Change scrolling visible
        </button>
        {scrollingVisible && <Scrolling />}
    </div>
  );
}

export default App;
