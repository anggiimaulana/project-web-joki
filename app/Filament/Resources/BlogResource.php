<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\KategoriBlog;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $label = 'Blog';

    protected static ?string $pluralLabel = 'Daftar Blog';

    protected static ?string $navigationLabel = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    protected static ?string $navigationGroup = 'Kelola Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Blog')
                    ->placeholder('Masukan judul blog')
                    ->required(),
                Select::make('kategori_blog_id')
                    ->label('Kategori Blog')
                    ->options(KategoriBlog::all()->pluck('nama_kategori', 'id'))
                    ->searchable()
                    ->required(),
                Textarea::make('content')
                    ->label('Isi Blog')
                    ->placeholder('Masukan isi blog')
                    ->columnSpanFull()
                    ->rows(5)
                    ->required(),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->disk('public')
                    ->directory('blog')
                    ->visibility('public')
                    ->previewable(true)
                    ->downloadable()
                    ->openable()
                    ->preserveFilenames()
                    ->required(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'Arsip' => 'Arsip',
                        'Publish' => 'Publish',
                    ])->searchable(),
                Select::make('user_id')
                    ->label('Penulis')
                    ->options(User::whereNotNull('name')->pluck('name', 'id'))
                    ->searchable()
                    ->placeholder("Masukan penulis blog")
                    ->required(),
                Select::make('posisi_kerja')
                    ->label('Posisi Pekerjaan Penulis')
                    ->options([
                        'Front-End Developer' => 'Front-End Developer',
                        'Back-End Developer' => 'Back-End Developer',
                        'Full-Stack Developer' => 'Full-Stack Developer',
                        'Mobile Developer' => 'Mobile Developer',
                        'Web Developer' => 'Web Developer',
                        'Game Developer' => 'Game Developer',
                        'UI/UX Designer' => 'UI/UX Designer',
                        'Content Writer' => 'Content Writer',
                        'Content Creator' => 'Content Creator',
                        'Machine Learning Engineer' => 'Machine Learning Engineer',
                        'Data Scientist' => 'Data Scientist',
                        'Data Analyst' => 'Data Analyst',
                        'Data Engineer' => 'Data Engineer',
                        'Cybersecurity Analyst' => 'Cybersecurity Analyst',
                        'DevOps Engineer' => 'DevOps Engineer',
                        'Cloud Engineer' => 'Cloud Engineer',
                        'DevSecOps Engineer' => 'DevSecOps Engineer',
                    ])->searchable(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled()
                    ->dehydrated() // biar tetap ikut disimpan ke DB
                    ->hiddenOn('create') // agar tidak tampil saat create
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->label('No')->rowIndex(),
                TextColumn::make('title')->label('Judul Blog'),
                TextColumn::make('kategoriBlog.nama_kategori')->label('Kategori Blog')->alignCenter(),
                TextColumn::make('status')
                    ->label('Status')
                    ->alignCenter()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Arsip' => 'warning',
                        'Publish' => 'success',
                    }),
                TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()->label('Edit')->color('warning'),
                    Tables\Actions\DeleteAction::make()->label('Hapus')->color('danger'),
                ])->label('Aksi'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
