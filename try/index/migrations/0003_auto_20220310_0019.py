# -*- coding: utf-8 -*-
# Generated by Django 1.11.29 on 2022-03-10 00:19
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('index', '0002_auto_20220309_0549'),
    ]

    operations = [
        migrations.AddField(
            model_name='padecimientos',
            name='articulo',
            field=models.TextField(default='Escribe un articulo...'),
        ),
        migrations.AlterField(
            model_name='padecimientos',
            name='descripcion',
            field=models.CharField(default='Escribe un texto...', max_length=600),
        ),
    ]
