<?php

use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
	public function testCanBeEnqueuedWithClosure()
	{
		// $request = $this->getMockBuilder(Request::class)
		// 				->setMethods(['singleton'])
		// 				->getMock();

  //       $request->expects($this->once())
  //               ->method('singleton')
  //               ->with($this->equalTo([
  //               	'method' => 'GET',
  //               	'uri' => 'dad/dadw/fasdf',
  //               	'query_string' => ''
  //               ]));
		$request = $this->createMock(Request::class);

		Route::get('someroute', function () {
			return;
		});

		$this->assertTrue(Route::run($request));
	}
}
