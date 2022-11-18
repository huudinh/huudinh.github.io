import { useState } from "react";

const Form = () => {
  const [value, setValue] = useState('Jogging');

  const handleSubmit = (event) => {
    event.preventDefault();
    // console.log('value', value);
  };
  
  return (
    <form onSubmit={handleSubmit}>
        <input type='text' value={value} /> 
        <button type='submit'>Submit</button>
    </form>
  );
};

export default Form;