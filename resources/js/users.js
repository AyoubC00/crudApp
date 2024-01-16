const handleRowClick = ({ target }) => 
{
    const record = target.closest("tr");
    if (record)
    {
        const endPoint = encodeURI(`users/${record.dataset["userId"]}`);
        fetch(endPoint);
    }
}

document.querySelector("#usersTable").addEventListener("click", handleRowClick);