import { useContext } from "react";
import ThemeContext from "./ThemeContext";

const ProductList = () => {
    const value = useContext(ThemeContext);

    return (
        <div>
            <div>{value.theme}</div>
        </div>
    );
};

export default ProductList;