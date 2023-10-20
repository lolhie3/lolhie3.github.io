import asyncio
import logging
from aiogram import Bot, Dispatcher, types
from aiogram.filters.command import Command
from aiogram.utils.keyboard import InlineKeyboardBuilder

# Включаем логирование, чтобы не пропустить важные сообщения
logging.basicConfig(level=logging.INFO)
# Объект бота
bot = Bot(token="6842029840:AAFTfYLeO7qRa4VJQdJ8VTy1ZwQMvn_V_SU")
# Диспетчер
dp = Dispatcher()


@dp.message(Command("start"))
async def cmd_inline_url(message: types.Message, bot: Bot):
    builder = InlineKeyboardBuilder()
    builder.row(types.InlineKeyboardButton(
        text="Play Fancade", url="https://t.me/fancade_bot/fancade")
    )
    builder.row(types.InlineKeyboardButton(
        text="Entrenched",
        url="https://t.me/fancade_bot/entrenched")
    )

    await message.answer(
        'Welcome to Fancade Bot!\nSelect the game or start Fancade right away.',
        reply_markup=builder.as_markup(),
    )

# Запуск процесса поллинга новых апдейтов
async def main():
    await dp.start_polling(bot)

if __name__ == "__main__":
    asyncio.run(main())
