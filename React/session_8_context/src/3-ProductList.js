import ThemeContext from "./ThemeContext";

const ProductList = () => {
    return (
        <div>
            <ThemeContext.Consumer>
                {(value) => {
                    return <div>{value.theme}</div>;
                }}
            </ThemeContext.Consumer>
        </div>
    );
};

export default ProductList;