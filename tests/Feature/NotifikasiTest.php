<?php

namespace Tests\Feature;

use Tests\TestCase;

class NotifikasiTest extends TestCase
{
    public function test_root_route_loads_notifikasi_page(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSeeText('Sistem Notifikasi');
        $response->assertSeeText('Email terkirim: Pesanan #001 berhasil diproses.');
    }
}
