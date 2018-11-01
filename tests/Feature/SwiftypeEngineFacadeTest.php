<?php

namespace Loonpwn\Swiftype\Tests\Feature;

use Loonpwn\Swiftype\Facades\SwiftypeEngine;
use Loonpwn\Swiftype\Tests\BaseSwiftypeTest;

class SwiftypeEngineFacadeTest extends BaseSwiftypeTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDocumentListWorks()
    {
        $documents = SwiftypeEngine::listDocuments();
        $this->assertArrayHasKey('results', $documents, 'We can list engine documents');
        var_dump('Found documents', $documents['results']);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSearchWorks()
    {
        $documents = SwiftypeEngine::search('test');
        $this->assertArrayHasKey('results', $documents, 'We can search engine documents');
        var_dump('Found documents', $documents['results']);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPurgeDocuments()
    {
    	$documents = SwiftypeEngine::purgeAllDocuments();
	    if (is_array($documents)) {
		    $this->assertArrayHasKey(0, $documents, 'Purge documents returned a valid response');
		    var_dump('Deleted documents', $documents);
	    } else {
	    	$this->assertTrue($documents);
	    }
    }
}
