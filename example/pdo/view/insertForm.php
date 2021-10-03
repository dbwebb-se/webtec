<h1>Insert new row to the database</h1>

<form method="post" action="insert-process.php">
    <fieldset>
        <legend>Insert new row</legend>

        <p>
            <label>Name:
                <input type="text" name="name" placeholder="The name">
            </label>
        </p>

        <p>
            <label>Date:
                <input type="text" name="date" placeholder="The date">
            </label>
        </p>

        <p>
            <label>Namnlängd:
                <input type="checkbox" name="nameLength" value="Ja" placeholder="The name">
            </label>
        </p>

        <p>
            <input type="reset" value="Reset">
            <input type="submit" name="doit" value="Add">
        </p>
    </fieldset>
</form>
