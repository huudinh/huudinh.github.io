import { useFormik } from "formik";
import * as yup from 'yup';

function App() {
  const validationSchema = yup.object().shape({
    username: yup
      .string()
      .min(2, "Too Short!")
      .max(10, "Too Long!")
      .required("Required"),
    password: yup
      .string()
      .min(2, "Too Short!")
      .max(10, "Too Long!")
      .required("Required")
  });

  const formik = useFormik({
    initialValues: {
      username: "",
      password: "",
      rememberMe: false
    },
    onSubmit: (values) => {
      console.log(values);
    },
    validationSchema: validationSchema
  });

  console.log(formik.errors);

  return (
    <div>
      <form onSubmit={formik.handleSubmit}>
        <div>
          <label>Username</label>
          <input
            type="text"
            value={formik.values.username}
            onChange={formik.handleChange}
            name="username"
          />
        </div>
        <div>
          <label>Password</label>
          <input
            type="password"
            value={formik.values.password}
            onChange={formik.handleChange}
            name="password"
          />
        </div>
        <div>
          <label>Remember me</label>
          <input
            type="checkbox"
            value={formik.values.rememberMe}
            onChange={formik.handleChange}
            name="rememberMe"
          />
        </div>
        <button>Submit</button>
      </form>
    </div>
  );
}

export default App;