# Generated by Django 4.0.1 on 2022-03-04 02:12

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('index', '0012_cirugias_intervalo'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='cirugias',
            name='intervalo',
        ),
        migrations.AddField(
            model_name='carrusel',
            name='intervalo',
            field=models.IntegerField(default=5000),
        ),
    ]
