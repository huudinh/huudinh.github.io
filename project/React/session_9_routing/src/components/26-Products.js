import { Link, Outlet, useSearchParams } from 'react-router-dom';

const Products = () => {
    const [searchParams, setSearchParams] = useSearchParams({});

    const handleSortChange = (event) => {
        setSearchParams({
            sortBy: event.target.value,
        });
    };

    return (
        <div>
            <h1>Products</h1>
            <select onChange={handleSortChange}>
                <option value='asc'>Ascending</option>
                <option value='desc'>Descending</option>
            </select>
            <ul>
                <li>
                    <Link to='/products/1'>Products 1</Link>
                </li>
                <li>
                    <Link to='/products/2'>Products 2</Link>
                </li>
                <li>
                    <Link to='/products/3'>Products 3</Link>
                </li>
            </ul>
            <Outlet />
        </div>
    );
};

export default Products;