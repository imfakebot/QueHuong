export class userService {
    constructor({ userModel }) {
        this.User = userModel;
    }

    /**
     * Tạo một người dùng mới trong cơ sở dữ liệu.
     * @param {object} userData Dữ liệu của người dùng.
     * @param {object} options Tùy chọn cho Sequelize (ví dụ: transaction).
     * @returns {Promise<User>} Đối tượng User vừa được tạo.
     */
    async createUser(userData, options = {}) {
        return this.User.create(userData, options);
    }

    /**
     * Tìm một người dùng dựa trên các điều kiện.
     * @param {object} criteria Điều kiện tìm kiếm.
     * @returns {Promise<User|null>} Đối tượng User hoặc null nếu không tìm thấy.
     */
    async findUser(criteria) {
        return this.User.findOne({ where: criteria });
    }
}