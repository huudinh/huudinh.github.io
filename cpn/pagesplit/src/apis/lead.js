
const URL = 'src/apis/leadList.json'
export const getLead = async({ pageNum }) => {
    try {
        const newData = []
       
        // Call API
        const response = await fetch(URL);
        const data = await response.json();

        // Pagination
        const paginationLimit = 15
        const pageCount = Math.ceil(data.length / paginationLimit);

        const prevRange = (pageNum - 1) * paginationLimit;
        const currRange = pageNum * paginationLimit;

        // getData
        data.forEach((item, index) => {
            if (index >= prevRange && index < currRange) {
                newData.push(item)
            }
        });
        console.log(newData);
        console.log(pageCount);
        return {
            render: newData,
            pageCount: pageCount
        }
    } catch (e) {
        console.log(e);
        return
    }
}