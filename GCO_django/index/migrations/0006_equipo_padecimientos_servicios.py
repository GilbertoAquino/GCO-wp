# Generated by Django 4.0.2 on 2022-02-24 01:00

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('index', '0005_alter_cirugias_articulo'),
    ]

    operations = [
        migrations.CreateModel(
            name='Equipo',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('imagen', models.ImageField(upload_to='img')),
                ('titulo', models.CharField(max_length=25)),
                ('descripcion', models.CharField(default='Escribe un texto...', max_length=600)),
                ('articulo', models.TextField(default='Escribe un artículo...')),
            ],
        ),
        migrations.CreateModel(
            name='Padecimientos',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('imagen', models.ImageField(upload_to='img')),
                ('titulo', models.CharField(max_length=25)),
                ('descripcion', models.CharField(default='Escribe un texto...', max_length=600)),
            ],
        ),
        migrations.CreateModel(
            name='Servicios',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('imagen', models.ImageField(upload_to='img')),
                ('titulo', models.CharField(max_length=25)),
                ('descripcion', models.CharField(default='Escribe un texto...', max_length=600)),
                ('boton', models.CharField(default='Servicio', max_length=20)),
            ],
        ),
    ]