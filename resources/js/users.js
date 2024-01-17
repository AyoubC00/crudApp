const handleRowClick = async ({ target }) => 
{
    const record = target.closest("tr");
    if (record)
    {
        const endPoint = encodeURI(`users/${record.dataset["userId"]}`);
        location.href = endPoint;
    }
}

document.querySelector("#usersTable").addEventListener("click", handleRowClick);