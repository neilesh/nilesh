<h3>Activate A Module</h3>

<p>
    Edit Cloggy bootstrap.php at : <strong>app/Plugin/Cloggy/Config/bootstrap.php</strong>, and
    at line 11 add your module name. Then your code should be like this : <br /><br />
    <pre>
    Configure::write('Cloggy.modules', array(
        'CloggyBlog', 'CloggyUsers', 'CloggyDocs','ModuleTest','YourModule'
    ));
    </pre>    
    If you want to disable some module, then just delete their names from the list,
    it will automatically remove module and prevent to be accessed via url.
</p>