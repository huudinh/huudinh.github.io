import { useFormik } from "formik";

function App() {
  return (
    <div>
      <form>
        <div>
          <label>Username</label>
          <input type="text" name="username" />
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" />
        </div>
        <div>
          <label>Remember me</label>
          <input type="checkbox" name="rememberMe" />
        </div>
        <button>Submit</button>
      </form>
    </div>
  );
}

export default App;